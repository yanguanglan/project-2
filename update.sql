alter table ims_uni_account add province varchar(64) not null default '' after description;
alter table ims_uni_account add city varchar(64) not null default '' after province;
alter table ims_uni_account add district varchar(64) not null default '' after city;
alter table ims_uni_account add industry_parent varchar(64) not null default '' after district;
alter table ims_uni_account add industry_child varchar(64) not null default '' after industry_parent;
alter table ims_uni_account add wxrenzheng varchar(225) not null default '' after industry_child;
alter table ims_uni_account add createtime int(11)  not null default 0 after wxrenzheng;
alter table ims_uni_account add scan_count int not null default 0 after wxrenzheng;
alter table ims_uni_account add is_check tinyint(1) not null default 0 after scan_count;
alter table ims_uni_account add endtime int(11) not null default 0 after createtime;
alter table ims_site_article add keyword varchar(64) not null default '' after title;
alter table ims_site_article add scan_count int(11) not null default 0 after linkurl;
alter table ims_uni_account add siteurl varchar(64) not null default '' after scan_count;
alter table ims_uni_account add tweibo varchar(64) not null default '' after scan_count;
alter table ims_uni_account add sweibo varchar(64) not null default '' after tweibo;
alter table ims_uni_account add content text not null default '' after sweibo;
alter table ims_uni_account add position varchar(12) not null default '' after siteurl;
alter table ims_uni_account add thumb varchar(255) not null default '' after scan_count;
alter table ims_uni_account add zan int not null default 100 after scan_count;
 alter table ims_uni_account add title varchar(225) not null default '' after sweibo;
