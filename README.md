![](https://gitee.com/bei-gui/picture_bed/raw/master/img/hive-logo.jpg)
====

因为社团需要比赛，所以自己搭建ctf平台

使用H1VE开源项目对其中的部分内容进行更改，放置了多个题目，做到开箱即用，方便后面学弟学妹进行比赛环境搭建。

> ## 使用方法

将项目代码clone到本地之后使用docker-compose 语法启动项目docker环境

```
docker-compose -f single.yml up -d
```

管理员登录账号admin 密码 admin

关闭平台命令

```
docker-compose -f single.yml down
```

> ## web环境启动

web环境的启动方法与ctf平台启动方法类似，需进入jnvcctf目录下的web目录下然后依次进入web1-web8

执行

```
docker-compose -f docker-compose.yml up -d
```

![](https://gitee.com/bei-gui/picture_bed/raw/master/img/image-20210712182951772.png)

