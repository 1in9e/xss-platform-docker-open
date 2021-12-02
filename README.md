# xss-platform-docker
为了方便快速搭建，把网上流传的改进版的xss.me用docker进行部署，再build dockerfile之前，请完成下列操作

1. 修改mysql.sh中的`UPDATE oc_module SET code=REPLACE(code,'http://xsser.me','http://xss.ohlinge.cn')`后面的域名替换为自己xss平台所使用的域名
2. 修改config.php中的 urlroot 为自己的域名
3. 修改authtest.php中的域名为自己的域名

## Usage
1. 如说明修改配置信息
2. 开启docker(注意docker-compose中端口映射是否与宿主机冲突)
```
docker-compose up -d --build
```
3. 进入容器执行mysql.sh(导入并修改数据库配置)
```
docker exec -it <containter id> /bin/bash
    chmod +x mysql.sh
    ./mysql.sh
```

### 设自己为管理员
备注：注册成功用户后，修改管理员表中的adminlevel为1时 可定义自身为最高管理员可发送邀请码
```mysql
# MySQL
update oc_user SET adminLevel=1 where id=8;
```

### 邮件提醒
source/function.php
```
# 257 row
array('host'=>'smtp.163.com','user'=>'ohlinge@163.com','pass'=>'yourpassword')
```

