# Fred-Blog
本项目迁移至github,欢迎老铁们下载使用

本项目使用 PHP 框架 Laravel 5.5 进行开发。 这是博主给自己搭建的专注内容的博文平台，UI什么的都做的比较随意（比如前台弄了乡村非主流canvas3D极光效果）。还是衷心欢迎大家在此基础上自由开发，搞得网站漂亮人人爱~。

废话不说，上图，看上了再往下看   
  <br />前台：

  <br />![image](https://github.com/Fredchen188/Fred-Blog/blob/master/public/img/front1.gif) 

  <br />![image](https://github.com/Fredchen188/Fred-Blog/blob/master/public/img/front2.gif)  

  <br />后台：   

  <br />![image](https://github.com/Fredchen188/Fred-Blog/blob/master/public/img/admin1.gif)   

  <br />![image](https://github.com/Fredchen188/Fred-Blog/blob/master/public/img/e.gif)

博客功能具有以下功能  

分类管理  
文章管理  
标签管理  
专题深度探讨专栏      
评论管理（博主可以通过后台直接回复，或者进行新消息的接受）  
导航管理  
Algolia驱动的全文搜索  
UEdeitor富文本编辑器  

项目概述
> 项目名称：Fred Blog
> 项目运行地址：http://blog.fyguoji.cn
> 项目后台演示地址：http://demo.fyguoji.cn
已经升级至Laravel 5.5 版本。

目前运行环境
Nginx 1.8+
PHP 7.0+
MySQL 5.6+
CentOS 6.8
部署/安装  
需要在系统上安装了基本的PHP运行环境、PHP包管理工具composer

基础安装
1. 克隆源代码
克隆源代码到本地：

> git clone https://github.com/Fredchen188/Fred-Blog.git
2. 安装扩展包依赖
> composer install
4. 生成配置文件
> cp .env.example .env
然后在.env的配置文件里面修改如下配置项：

#Algolia驱动
> ALGOLIA_APP_ID=  
> ALGOLIA_SECRET=

#数据库
> DB_DATABASE=  
> DB_USERNAME=  
> DB_PASSWORD=

5. 执行数据库迁移（想要初始数据也可以看下一步）  
> php artisan migrate

6.或者你也可以直接导入数据库结构和数据文件: 导入数据库文件.sql

7.记得要，或者用phpstorm直接根据提示init一下就行了
> composer dumpautoload  

8.改了配置最好这样
> php artisan configL:clear   

9.部署时候为了更快你可以  
> php artisan route:cache  
> php artisan config:cache  

前后台入口
> 前台为：yourdomain.com  
> 后台为：yourdomain.com/admin/login

初始账号及密码
> email: fredchen188@.com  
> passwrd: admin 

如果要开启调试模式，请修改 .env 文件， APP_ENV=local 和 APP_DEBUG=true  
> 首页地址：http://example.com/  

> 管理后台：http://example.com/login  

> 默认用户名：fredchen188@gmail.com  

> 密码：admin  


至此, 安装完成。  

注：如果使用导入数据后，想要看显示初始化的图片，就请在数据库改几处图片的url。  

1：posts 表的 p_image字段内容，把b.com 改为你的网址  

2：admins 表的avatar字段内容，把b.com 改为你的网址  

3：webs 表的logo字段内容，把.com 改为你的网址  

这些都只是没有含义的图片和文字，还是请老铁们自己上传图片吧。  


License  
大家想怎么玩就怎么玩~  
PS: 博主一直在为公司的客户建站，收点小钱勉强过日子。现在开源这个小项目求各位拍砖~轻点~
