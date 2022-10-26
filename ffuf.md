# FFUF Report

  Command line : `ffuf -u http://10.10.179.227/FUZZ -c -w /usr/share/seclists/Discovery/Web-Content/directory-list-2.3-medium.txt -ic -fs 0 -of md -o working/ffuf.md`
  Time: 2022-10-07T20:11:55&#43;05:00

  | FUZZ | URL | Redirectlocation | Position | Status Code | Content Length | Content Words | Content Lines | Content Type | Duration | ResultFile |
  | :- | :-- | :--------------- | :---- | :------- | :---------- | :------------- | :------------ | :--------- | :----------- |
  |  | http://10.10.179.227/ |  | 1 | 200 | 755 | 55 | 16 | text/html;charset=UTF-8 | 478.676909ms |  |
  