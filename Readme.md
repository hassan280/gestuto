*Name: Rezaur Rahman Hasib*</br>
*Matric Number: 1823141*
# Online Classroom System
 <p>
    <h2>1.0 Introduction</h2> 
 </p>
The online classroom is an internet-based academic platform that allows interactive study to continue in the midst of a crisis where physical attendance of classes becomes difficult or risky. Hence, i want to make an online-based classroom that will be a futuristic solution to the problems of tomorrow. The purpose of making this project is to build healthy relationships and a strong sense of community teaching. In an online classroom, there are only two actors: faculty and student. So, I will authenticate my website via ‘web app-making tools’ in such a way so that users of distinct backgrounds can register and log in to the classroom website accordingly and conduct classes. The best part is no bad weather, unfortunate traffic or cases like pandemics would ever hamper education for any student when user-friendly online classrooms like mine are there to save the day.
<br>
<br>


## 1.1 Objective

my online based classroom will be a futuristic fix to problems of both today and tomorrow. Online learning will not only be an affordable premise for education but also offer benefits for comfort and ease only possible for online platforms. Through my application Teachers and the student will be able to sign up and log in to the system. Teachers will be able to create classrooms and they should be able to send invitation codes to the students and using that, students should be able to join the classroom. Then teachers can assign tasks or share some important materials and students can see their reading materials and deadlines on a per-class basis.

## 1.2 Features and Functionalities 
Here is a list of features and functionalities that will be on the system. 
- For Students
  - Login as student
  - Join classroom using class code provided by teacher.
  - View joined classrooms

- For Teachers
   - Login as Teacher
   - Create Classroom
   - Post in the Created classroom
   - Share Classroom Code for students to join
   - view created classroom
   - create post in classroom

 ## 1.3 List of Views, Controllers, Models and routes of the system. 
- Views
  - dashboard.blade.php
  - welcome.blade.php
  - Student , Teacher, layouts, Content, Classroom, Components folders containing frontend page
- Controllers
  -  ClassroomController.php
  -  ContentController.php
  -  Controller.php
- Routes
  - web.php
  - auth.php
  - api.php
  - channels.php
  - console.php.
- Models
    - Classroom.php
    - Content.php
    - Role.php
    - User.php
## 2.0 Diagrams
 - ER Diagram </br>
![image](https://user-images.githubusercontent.com/95669245/151188296-ef86f6ea-5d1e-4d70-ba56-d37008d51929.png)


 - Sequence Diagram
  
  
  ## 3.0 Code Implementation
  ![image](https://user-images.githubusercontent.com/95669245/151190196-eff7e3f1-ceac-435a-b166-8e1f3abd3bed.png)

  > <center>Figure1 : Classroom page creation and data transfer.</center>
<br>


![image](https://user-images.githubusercontent.com/95669245/151190299-9b3f1233-040c-48cf-8095-1530a0072351.png)
  > <center>Figure2: Classroom controller page where query and connection happened
</center>
<br>

![image](https://user-images.githubusercontent.com/95669245/151190334-1609d50c-0ab9-4236-b8c4-adca02bfe69d.png)
  ><center> Figure3: Content controller page where classroom posts were connected.</center>
<br>


![image](https://user-images.githubusercontent.com/95669245/151190385-88879f8c-4818-4bac-a991-fa7e9e9b7386.png)
  > <center>Figure4: code of navigation link where we gave permission to show the navigation bar.</center>
<br>



  ## 3.1 Packages and Database
  
  Basically, the composer needs the package called breeze to develop the frontend part using those packages:

-	"composer require laravel/breeze --dev" 
-	"php artisan breeze: install" 

The NPM package actually helps with installing various packages and resolving their various dependencies. It greatly helps in Node development. NPM also helps you install the various modules that are needed for any web development: 

-	 "npm install && npm run dev"

To Generate code the composer needs the following package:
-	" composer require haruncpi/laravel-id-generator "

I have used the Xampp app for the database 
dependent on MySQL. Actually, XAMPP helps a local host or server to test its website and customers through computers and laptops before releasing it to the main server. It is a platform that furnishes an appropriate environment to test and check the working of projects dependent on Apache, Perl, MySQL database, and PHP through the system of the host itself. 

![image](https://user-images.githubusercontent.com/95669245/151190596-a8e40f43-f081-4202-90ed-bf399d01ab6b.png)
 
> <center>Figure1: Migrated Tables</center>
<br>

![image](https://user-images.githubusercontent.com/95669245/151190613-6df0adf9-5477-4dee-978d-861b33cfe99c.png)
> <center>Figure2: Classroom Table</center>
<br>

![image](https://user-images.githubusercontent.com/95669245/151190683-9ded522d-4264-4f5e-9641-b81bf7581296.png)
![image](https://user-images.githubusercontent.com/95669245/151190707-15f350c0-3858-4bc6-bee1-afaf0e9066d9.png)


> <center>Figure3: Users Table where the teacher is type 1 and student is type 2</center>

  ## 4.0 Screenshots
  
  ![image](https://user-images.githubusercontent.com/95669245/151190804-b6dad879-533d-4a0e-9c00-d0819d89e47a.png)
  > <center>Figure1: SignUp and Login Page</center>
<br>

  ![image](https://user-images.githubusercontent.com/95669245/151190903-720f11bd-4702-4e36-9048-5a4b11322f72.png)
  > <center>Figure2: Teachers Dashboard</center>
<br>

  ![image](https://user-images.githubusercontent.com/95669245/151190914-59db8af7-526f-41b2-ac6f-69a4e73e1ec7.png) <center>Figure3: Teachers can create classes</center>
<br>

![image](https://user-images.githubusercontent.com/95669245/151190974-626dcb0c-c4b1-46e1-b3ac-390f185b295a.png)
> <center>Figure4: Classroom Content</center>
<br>

![image](https://user-images.githubusercontent.com/95669245/151190985-e634142a-b3bb-40c3-8808-2bc13cc836a1.png)
> <center>Figure5: Students can join classroom</center>
<br>

This is an online platform for online classes. This is the  welcome screen for my web application. The first page is my homepage where any new user can sign up or log in if the user already has an account. Any user can join the classes using class codes. Also, On the next page, is the screenshot of my Dashboard where the classrooms are shown. It will show the following courses a student is doing. It will also show a button where only a teacher can even create a classroom. In the following classes, it will show the upcoming tasks. Only teachers have formal authorization to create classrooms and students only can join classrooms. Also only teachers can edit the classroom name, description and can delete the classroom where students have no authorization to do that. After creating classrooms, both teachers and students can create a post for the new following classes as well.


  ## 5.0 Problem Faced and Conclusion
  
  Completing the project wasn't an easy task for me . I bulid a different Project which was about Car Rental system but at the very last moment it failed so i had to submit this peoject which i did this semester as a practice. the other project was showing some error which i could fix .
  other than this i had to do the project alone as i had some problems with my ex-groupmates. 
  Although i havent completely developed this website as i wanted,i am still happy to be able to submit something i built myself.
  
