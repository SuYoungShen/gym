@echo off
set nowYear=%date:~0,4%
set nowMonth=%date:~5,2%
set nowDay=%date:~8,2%
set nowHr=%time:~0,2%

if %nowHr% LSS 10 set nowHr=0%nowHr%
set nowMin=%time:~3,2%

set NewFileName=Log_File_%nowYear%%nowMonth%%nowDay%%nowHr%%nowMin%.sql

set hour=%time: =0%
set LogFile=gym_%DATE:~0,4%%DATE:~5,2%%DATE:~8,2%%hour:~0,2%%TIME:~3,2%%TIME:~6,2%.sql

cd C:\xampp\mysql\bin

mysqldump -h localhost -u root -p --databases gym > C:\xampp\htdocs\gym\sql\%LogFile%

pause
