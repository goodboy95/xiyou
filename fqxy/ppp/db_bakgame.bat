

@echo off&setlocal enabledelayedexpansion
set Ymd=%date:~,4%%date:~5,2%%date:~8,2%


set "topa3=D:\���ݱ���\%ymd%\��Ϸ����\ache\"
set "topa4=D:\���ݱ���\%ymd%\��Ϸ����\acher\"

set "topa6=D:\���ݱ���\%ymd%\���ݿ�\xyy\"



xcopy D:\WWW\fqxy\ache\*.* %topa3% /s /e /h /d /y
xcopy D:\WWW\fqxy\acher\*.* %topa4% /s /e /h /d /y


xcopy C:\phpStudy\MySQL\data\xyy\*.* %topa6% /s /e /h /d /y




