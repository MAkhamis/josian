<?php


	
$sql = 'CREATE TABLE '.$wpdb->prefix .'webagency_banners (
  id_banners int(11) NOT NULL AUTO_INCREMENT,
  name varchar(4000) NOT NULL,
  description text NOT NULL,
  id_websites int(11) NOT NULL,
  image varchar(4000) NOT NULL,
  PRIMARY KEY (id_banners)
)';

dbDelta( $sql );

$sql = 'CREATE TABLE '.$wpdb->prefix .'webagency_images (
  id_images int(11) NOT NULL AUTO_INCREMENT,
  name varchar(4000) NOT NULL,
  description mediumtext NOT NULL,
  date datetime NOT NULL,
  image varchar(4000) NOT NULL,
  id_projects int(11) NOT NULL,
  PRIMARY KEY (id_images)
)';

dbDelta( $sql );

$sql = 'CREATE TABLE '.$wpdb->prefix .'webagency_pages (
  id_pages int(11) NOT NULL AUTO_INCREMENT,
  name varchar(4000) NOT NULL,
  introline text NOT NULL,
  description text NOT NULL,
  id_websites int(11) NOT NULL,
  id int(11) NOT NULL,
  id_parent int(11) NOT NULL,
  image varchar(4000) NOT NULL,
  PRIMARY KEY (id_pages),
  KEY id (id)
)';

dbDelta( $sql );




$sql = 'CREATE TABLE '.$wpdb->prefix .'webagency_projects (
  id_projects int(11) NOT NULL AUTO_INCREMENT,
  name varchar(4000) NOT NULL,
  description text NOT NULL,
  id_projects_categories int(11) NOT NULL,
  bywho text NOT NULL,
  date_completed date NOT NULL,
  forwho text NOT NULL,
  PRIMARY KEY (id_projects)
)';

dbDelta( $sql );

$sql = 'CREATE TABLE '.$wpdb->prefix .'webagency_projects_categories (
  id_projects_categories int(11) NOT NULL AUTO_INCREMENT,
  name varchar(4000) NOT NULL,
  description text NOT NULL,
  id_websites int(11) NOT NULL,
  PRIMARY KEY (id_projects_categories)
)';

dbDelta( $sql );

$sql = 'CREATE TABLE '.$wpdb->prefix .'webagency_testimonials (
  id_testimonials int(11) NOT NULL AUTO_INCREMENT,
  description text NOT NULL,
  name text NOT NULL,
  company_name text NOT NULL,
  image text NOT NULL,
  id_websites int(11) NOT NULL,
  PRIMARY KEY (id_testimonials)
)';

dbDelta( $sql );

$sql = 'CREATE TABLE '.$wpdb->prefix .'webagency_websites (
  id_websites int(11) NOT NULL AUTO_INCREMENT,
  engine text NOT NULL,
  permalink varchar(4000) NOT NULL,
  theme varchar(4000) NOT NULL,
  name varchar(4000) NOT NULL,
  description text NOT NULL,
  date datetime NOT NULL,
  address mediumtext NOT NULL,
  email varchar(4000) NOT NULL,
  phone varchar(4000) NOT NULL,
  id_users int(11) NOT NULL,
  indexpage text NOT NULL,
  portfolio text NOT NULL,
  shop text NOT NULL,
  blog text NOT NULL,
  contact_us text NOT NULL,
  page text NOT NULL,
  header text NOT NULL,
  slider text NOT NULL,
  testimonials text NOT NULL,
  footer text NOT NULL,
  quote text NOT NULL,
  instagram_id int(11) NOT NULL,
  fax int(11) NOT NULL,
  map text NOT NULL,
  blog_single text NOT NULL,
  facebook text NOT NULL,
  twitter text NOT NULL,
  gplus text NOT NULL,
  pinterest text NOT NULL,
  vimeo text NOT NULL,
  github text NOT NULL,
  yahoo text NOT NULL,
  linkedin text NOT NULL,
  cone text NOT NULL,
  ctwo text NOT NULL,
  cthree text NOT NULL,
  cfour text NOT NULL,
  hfont text NOT NULL,
  skype text NOT NULL,
  domain text NOT NULL,
  bought tinyint(1) NOT NULL,
  start_date date NOT NULL,
  expiry_date date NOT NULL,
  domain_comment text NOT NULL,
  logo text NOT NULL,
  paypal text NOT NULL,
  facebook_page_url text NOT NULL,
  PRIMARY KEY (id_websites)
)';

dbDelta( $sql );