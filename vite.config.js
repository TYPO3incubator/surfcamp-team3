import { defineConfig } from 'vite';
import { dirname, resolve } from 'node:path';
import { fileURLToPath } from 'node:url';
import autoOrigin from 'vite-plugin-auto-origin';
import inject from '@rollup/plugin-inject';

const port = 5173;
const origin = `${process.env.DDEV_PRIMARY_URL}:${port}`;
// TYPO3 root path (relative to this config file)
const VITE_TYPO3_ROOT = "./";
// Vite input files (relative to TYPO3 root path)
const VITE_ENTRYPOINTS = [
    "assets/app.js",
    "assets/Scss/rte.scss",
];
const path = require('path')

// Output path for generated assets
const VITE_OUTPUT_PATH = "local_packages/restaurant/Resources/Public/Vite";

const currentDir = dirname(fileURLToPath(import.meta.url));
const rootPath = resolve(currentDir, VITE_TYPO3_ROOT);
export default defineConfig(({command, mode}) => {
    return {
        resolve: {
            alias: {
                '~bootstrap': path.resolve(__dirname, 'node_modules/bootstrap'),
                '~bootstrap-icons': path.resolve(__dirname, 'node_modules/bootstrap-icons'),
                '~hamburgers': path.resolve(__dirname, 'node_modules/hamburgers'),
                '~lightbox2': path.resolve(__dirname, 'node_modules/lightbox2'),
            }
        },
        mode: `${mode}`,
        base: '',
        build: {
            minify: mode !== 'development',
            manifest: true,
            assetsInlineLimit: 100, // Do not inline SVG files, so it can be used by the SvgIconProvider
            rollupOptions: {
                input: VITE_ENTRYPOINTS.map(entry => resolve(rootPath, entry)),
                output: {
                    manualChunks: (path) => path.split('/').reverse()[path.split('/').reverse().indexOf('node_modules') - 1]
                }
            },
            outDir: resolve(rootPath, VITE_OUTPUT_PATH),
        },
        publicDir: false,

        // Adjust Vites dev server for DDEV
        // https://vitejs.dev/config/server-options.html
        server: {
            // respond to all network requests:
            host: '0.0.0.0',
            port: port,
            strictPort: true,
            // Defines the origin of the generated asset URLs during development
            origin: origin
        },
        plugins: [
            inject({
                $: 'jquery',
            }),
            autoOrigin(),
        ]
    }
});