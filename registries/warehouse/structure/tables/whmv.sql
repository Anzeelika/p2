CREATE TABLE whmv (
  id int NOT NULL AUTO_INCREMENT PRIMARY KEY,
  typeId int not null,
  batchId int not null,
  dt date not null,
  articleId int not null,
  modifierId int not null default 1,
  whSrcId int not null,
  whDstId int not null,
  companySrcId int not null,
  companyDstId int not null,
  quantity decimal(18,6) not null default 0,
  cost decimal(18,6) not null default 0,
  price decimal(18,6) not null default 0,
  discount decimal(18,2) not null default 0,
  memo text not null default '',
  mdCreated datetime DEFAULT NULL,
  mdUpdated datetime DEFAULT NULL,
  mdCreatorId int DEFAULT NULL,
  mdUpdaterId int DEFAULT NULL,
  iqp decimal(18,6) not null default 0,
  oqp decimal(18,6) not null default 0
)