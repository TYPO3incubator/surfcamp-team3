#
# Table structure for table 'tt_content'
#
CREATE TABLE tt_content (
    source_url text,
    cta_link1 varchar(255) DEFAULT '' NOT NULL,
    cta_link2 varchar(255) DEFAULT '' NOT NULL,
    cta_label1 varchar(255) DEFAULT '' NOT NULL,
    cta_label2 varchar(255) DEFAULT '' NOT NULL,
);

#
# Table structure for table 'tx_restaurant_domain_model_alert'
#
CREATE TABLE tx_restaurant_domain_model_alert (
    type varchar(255) DEFAULT '' NOT NULL,
    text varchar(255) DEFAULT '' NOT NULL,

    KEY parent (pid),
    KEY t3ver_oid (t3ver_oid,t3ver_wsid),
    KEY language (l10n_parent,sys_language_uid)
);