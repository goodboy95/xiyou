

@echo off&setlocal enabledelayedexpansion
set Ymd=%date:~,4%%date:~5,2%%date:~8,2%
set "topa1=D:\���ݱ���\%ymd%\��������\ache\"
set "topa2=D:\���ݱ���\%ymd%\��������\acher\"



set "topa5=D:\���ݱ���\%ymd%\���ݿ�\xxjyuser\"



xcopy D:\WWW\ache\*.* %topa1% /s /e /h /d /y
xcopy D:\WWW\acher\*.* %topa2% /s /e /h /d /y



xcopy C:\phpStudy\MySQL\data\xxjyuser\*.* %topa5% /s /e /h /d /y





