#Setting up the project
```
#Clone the repository: 
git clone https://github.com/neatbasis/yii-bootstrapped
cd yii-bootstrapped

#initialize submodules
git submodule init
git submodule update

#Create a (mysql)database for the project.
#Make copies from the .example files in protected/config/
#configure the following files accordingly: 
  protected/config/main.php
  protected/config/console.php

#Make these directories writable manually
chmod 777 assets protected/runtime
#if you are running selinux also change the filesystem labels
chcon -R -t httpd_sys_rw_content_t assets protected/runtime 

#or with the script in tools directory(ignore the errors)
tools/fix-permissions.sh .

#Create the databse structure for the project(make sure you created the db)
cd protected
./yiic migrate
```
#Translating
```
#Translation tool usage: <?=Yii::t('navbar','Profile');?>
#This will refer to the string "Profile" in translation file navbar.php
#After you refer to new strings in the code, you can regenerate translation files for all the content with
./yiic message messages/config.php
#translation files will be in protected/messages
```

