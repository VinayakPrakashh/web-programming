### Turtorial
### (A). How to create and open ***html(JavaScript)*** programs??(in ubuntu) 

1. Oreate a folder with your name(any name) on the desktop 
 ( ***right-click ->new folder*** )
   
   ![1](https://user-images.githubusercontent.com/101159818/227761929-2971b3af-6e0d-4746-96a1-6a9f8c30c08d.png)
2. Open terminal by pressing ***ctrl+alt+T*** or by going to applications->system tools->terminal
 
   ![2](https://user-images.githubusercontent.com/101159818/227762004-680d18bf-1944-49b5-813f-1f4eba778e9d.png)
3. Type ***'cd Desktop/folder_name'**** and then hit Enter.
  ( *Note: The folder name should be the name of the folder that you have created on desktop )
   
   ![3](https://user-images.githubusercontent.com/101159818/227762116-280a86de-e3bb-488a-84d0-10679e963449.png)
4. Type ***'gedit file_name.html'*** in terminal and hit Enter. ( *Note: the file_name is the name of your html file. )

   ![4](https://user-images.githubusercontent.com/101159818/227762211-2b6e944d-5533-4678-b787-47785d9c1714.png)
5. Now you can type your html program in the opened window after that click on Save.
   
   ![5](https://user-images.githubusercontent.com/101159818/227762276-8c53b05e-64b4-41ab-b451-ae93a830a84b.png)
6. To run the program close program window and then in the terminal type ***' firefox file_name.html '***
   (or just open folder that you have created and then right click on html file then choose open with firefox)
   
   ![6](https://user-images.githubusercontent.com/101159818/227762388-4231fd09-f92b-46c5-99dc-42869b005a39.png)
   
7. Done

### (B). How to create and Run php programs
 
1. first you need to check whether you have xampp installed
   To do that open Home->Other Locations->computer->opt
   Check is there a folder named ***lampp*** if yes then you can proceed.
   
   ![7](https://user-images.githubusercontent.com/101159818/227763659-4ccbd3f9-b2f5-4fa4-80e6-25a77afa889e.png)
2. Now open terminal (***ctrl+alt+T***) then type the following ***'sudo /opt/lampp/manager-linux-x64.run'***
   ![9](https://user-images.githubusercontent.com/101159818/227763812-2f225c73-9642-42a4-933a-fb17cc18698a.png)

3. Now the xampp will open after that choose ***manage servers***
   ![10](https://user-images.githubusercontent.com/101159818/227763870-242b23b6-54bf-403c-9c47-3f0d7e03606c.png)
4. Now click on ***Start All*** you should see all servers are started running like this,
   
   ![11](https://user-images.githubusercontent.com/101159818/227763969-79a11772-0fba-4ca5-ac0e-329525d0598c.png)
   
5. If ***Mysql Databse*** or ***Apache Web Server*** didn't start running try this steps,
6. 
   If Mysql Database Not starting,
      1) Click on ***Mysql Database*** and select ***Configure***
      2) change the ***port*** From ***3306*** to ***3307***
      ![12](https://user-images.githubusercontent.com/101159818/227764205-8b970eea-6252-4fa8-8f3c-bcb9c5c843ae.png)

      3) click Ok and start Mysql Databse again
7. If Apache Web Server not starting,
   1) open terminal and type following ***'sudo apt remove apache2'*** hit Enter.
   ![13](https://user-images.githubusercontent.com/101159818/227764564-80780855-19b1-4671-8131-f68a9d1ce669.png)

   3) now try starting Apache Web Server again
8. If all are Ok then we can proceed.
9. Oreate a folder with your name(any name) on the desktop 
 ( ***right-click ->new folder*** )
![14](https://user-images.githubusercontent.com/101159818/227764830-42ea914b-7c8d-420d-8d2d-d83586ce2116.png)

10. Now Open Terminal and Type ***'cd Desktop/folder_name'**** and then hit Enter.
    ![15](https://user-images.githubusercontent.com/101159818/227764864-966427d3-8889-4116-9632-3a054fae5f5b.png)
11. Now Type following ***'gedit file_name.php'*** and hit enter.
    ![16](https://user-images.githubusercontent.com/101159818/227764950-87e80a80-8956-41fb-8de0-0e5b05b6eb27.png)
12. type Your php code and then click on save.
    ![17](https://user-images.githubusercontent.com/101159818/227765006-4a13917c-8306-4110-949b-661acb6eeddf.png)
13. Now close the file and go to previous terminal and type the following ***'sudo nautilus'*** and hit enter.
    ![18](https://user-images.githubusercontent.com/101159818/227765080-7df3ee21-1bb6-467c-8f05-6f67bf3fccb2.png)
14. From the opened window open the following folder path is ***Other locations->Computer->opt->lampp->htdocs***  then u should see this folder,
    ![19](https://user-images.githubusercontent.com/101159818/227765195-5a9e7e03-2612-4ce4-8bd8-67b25f2618dc.png)
15. Now u need to open Your folder that You have created which has the php file.
   ![22](https://user-images.githubusercontent.com/101159818/227765319-033dba49-689c-4ff5-a62c-c402beb76f34.png)

    
16. Just drag Your php file to ***htdocs*** folder
   ![20](https://user-images.githubusercontent.com/101159818/227765236-0f8aafa2-6034-4a09-a7b3-84c8e883e578.png)
17. That's it! Now Open firefox and type following ***'localhost/file_name.php'***  (replace file_name with your php filename)
    ![23](https://user-images.githubusercontent.com/101159818/227765390-bbc212b3-6984-4a71-adbc-f383fe676071.png)
18. Hit Enter. All Done!
    ![24](https://user-images.githubusercontent.com/101159818/227765435-d835494a-62f0-462a-a79e-6ef92d6b5916.png)


 
