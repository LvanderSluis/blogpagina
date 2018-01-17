-- ****************** SqlDBM: Microsoft SQL Server ******************
-- ******************************************************************

DROP TABLE [dbo].[blogtags];
GO


DROP TABLE [dbo].[blog_article];
GO


DROP TABLE [dbo].[user];
GO


DROP TABLE [table_4];
GO


--************************************** [dbo].[user]

CREATE TABLE [dbo].[user]
(
 [userid]      INT NOT NULL ,
 [name]        VARCHAR(50) NOT NULL ,
 [role]        VARCHAR(50) NOT NULL ,
 [birthday]    DATE NOT NULL ,
 [accountdate] DATETIME NOT NULL ,
 [description] VARCHAR(250) NOT NULL ,
 [active]      TINYINT NOT NULL ,
 [password]    VARCHAR(255) NOT NULL ,
 [email]       VARCHAR(50) NOT NULL ,
 [blocked]     TINYINT NOT NULL ,
 [photo_url]   VARCHAR(255) NOT NULL ,

 CONSTRAINT [PK_user] PRIMARY KEY CLUSTERED ([userid] ASC)
);
GO



--************************************** [table_4]

CREATE TABLE [table_4]
(

);
GO



--************************************** [dbo].[blog_article]

CREATE TABLE [dbo].[blog_article]
(
 [blogid]      INT NOT NULL ,
 [userid]      INT NOT NULL ,
 [title]       VARCHAR(50) NOT NULL ,
 [body]        TEXT NOT NULL ,
 [author]      INT NOT NULL ,
 [picture_url] VARCHAR(50) NOT NULL ,
 [date]        DATETIME NOT NULL ,
 [blocked]     TINYINT NOT NULL ,

 CONSTRAINT [PK_blog_article] PRIMARY KEY CLUSTERED ([blogid] ASC, [userid] ASC),
 CONSTRAINT [FK_34] FOREIGN KEY ([userid])
  REFERENCES [dbo].[user]([userid])
);
GO


CREATE NONCLUSTERED INDEX [fkIdx_34] ON [dbo].[blog_article]
 (
  [userid] ASC
 )

GO


--************************************** [dbo].[blogtags]

CREATE TABLE [dbo].[blogtags]
(
 [id]     INT NOT NULL ,
 [blogid] INT NOT NULL ,
 [userid] INT NOT NULL ,
 [tag]    VARCHAR(50) NOT NULL ,

 CONSTRAINT [PK_blogtags] PRIMARY KEY CLUSTERED ([id] ASC, [blogid] ASC, [userid] ASC),
 CONSTRAINT [FK_62] FOREIGN KEY ([blogid], [userid])
  REFERENCES [dbo].[blog_article]([blogid], [userid])
);
GO


CREATE NONCLUSTERED INDEX [fkIdx_62] ON [dbo].[blogtags]
 (
  [blogid] ASC,
  [userid] ASC
 )

GO
