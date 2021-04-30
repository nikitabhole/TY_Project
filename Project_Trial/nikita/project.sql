--
-- Database: `Homeland For special Childrens`
--

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

tydb=# create table users(userid smallserial primary key not null,username varchar(20) not null ,email varchar(20) not null,mobileno numeric(10) not null,password varchar(20) not null);
CREATE TABLE
tydb=# \d users;
                                      Table "public.users"
  Column  |         Type          | Collation | Nullable |                Default                
----------+-----------------------+-----------+----------+---------------------------------------
 userid   | smallint              |           | not null | nextval('users_userid_seq'::regclass)
 username | character varying(20) |           | not null | 
 email    | character varying(20) |           | not null | 
 mobileno | numeric(10,0)         |           | not null | 
 password | character varying(20) |           | not null | 
Indexes:
    "users_pkey" PRIMARY KEY, btree (userid)
----------------------------------------------------------------------------------------------------

tydb=# insert into users values(default,'priya','priya@gmail.com',1122334455,'priya@');
INSERT 0 1
tydb=# select * from users;
 userid | username |      email       |  mobileno  | password 
--------+----------+------------------+------------+----------
     12 | nikita   | nikita@gmail.com | 9623848576 | nik12
     13 | akash    | akash@gmail.com  | 1234567890 | akash12
     14 | priya    | priya@gmail.com  | 1122334455 | priya@
(3 rows)

--------------------------------------------------------------------------------------------------------
--Table for event
--
ydb=# create table event(eventno smallserial primary key not null,host_name varchar(30) not null,ename varchar(20) not null,edate date,timefrom varchar(20) not null,timeto varchar(20),venue varchar(30),managed_for varchar(10)check(managed_for in('parents','childrens')));
CREATE TABLE
tydb=# \d event;
                                        Table "public.event"
   Column    |         Type          | Collation | Nullable |                Default                 
-------------+-----------------------+-----------+----------+----------------------------------------
 eventno     | smallint              |           | not null | nextval('event_eventno_seq'::regclass)
 host_name   | character varying(30) |           | not null | 
 ename       | character varying(20) |           | not null | 
 edate       | date                  |           |          | 
 timefrom    | character varying(20) |           | not null | 
 timeto      | character varying(20) |           |          | 
 venue       | character varying(30) |           |          | 
 managed_for | character varying(10) |           |          | 
Indexes:
    "event_pkey" PRIMARY KEY, btree (eventno)
Check constraints:
    "event_managed_for_check" CHECK (managed_for::text = ANY (ARRAY['parents'::character varying, 'childrens'::character varying]::text[]))

tydb=# insert into event values(default,'Mrs.Ramesh Oza','Any problem?','03-10-2020','12 pm','2 pm','Tarangan hall','parents');
INSERT 0 1
tydb=# select * from event;
 eventno |     host_name     |       ename       |   edate    | timefrom | timeto |     venue      | managed_for 
---------+-------------------+-------------------+------------+----------+--------+----------------+-------------
       1 | Mrs.Ganesh More   | Meditation        | 2019-10-07 | 10 am    | 1 pm   | Soharab hall   | parents
       2 | Mrs.Mahesh Rane   | learn more        | 2019-03-10 | 12 pm    | 3 pm   | Soharab hall   | parents
       3 | Ms.Smita odase    | Health wealth     | 2018-11-20 | 12 pm    | 3 pm   | Modern hall    | parents
       4 | Ms.Sarika Jire    | learn theropies   | 2018-06-09 | 3 pm     | 5 pm   | Muktai Garden  | childrens
       5 | Mrs.Yogesh Mire   | Tension free      | 2019-06-01 | 10 am    | 12 pm  | Muktai Garden  | parents
       6 | Mrs.Akash Kirkire | Making fun        | 2020-01-10 | 4 pm     | 6 pm   | Savitri Garden | childrens
       7 | Ms.Reva Tithe     | Learn Activities  | 2020-02-10 | 4 pm     | 6 pm   | Santosh hall   | childrens
       8 | Ms.Nikita bhole   | Physical training | 2020-03-17 | 4 pm     | 6 pm   | Santosh hall   | childrens
       9 | Mrs.Ramesh Oza    | Any problem?      | 2020-03-10 | 12 pm    | 2 pm   | Tarangan hall  | parents
      15 | ol                | Ph                | 2020-02-24 | 4 pm     | 6 pm   | Santosh hall   | childrens
      20 | Ms.Akshata Desai  | Fun activities    | 2020-02-24 | 4 pm     | 7 pm   | Keshavnagar    | childrens
(11 rows)

----------------------------------------------------------------------

--  Table Donation
--
-----------------------------------------------------------------------------

tydb=# create table donation(donarid smallserial primary key not null,name varchar(20) not null,email varchar(20) not null,address varchar(20) not null,city varchar(10),state varchar(20),pincode int,amount float not null);
CREATE TABLE
tydb=# \d donation;
                                      Table "public.donation"
 Column  |         Type          | Collation | Nullable |                  Default                  
---------+-----------------------+-----------+----------+-------------------------------------------
 donarid | smallint              |           | not null | nextval('donation_donarid_seq'::regclass)
 name    | character varying(20) |           | not null | 
 email   | character varying(20) |           | not null | 
 address | character varying(20) |           | not null | 
 city    | character varying(10) |           |          | 
 state   | character varying(20) |           |          | 
 pincode | integer               |           |          | 
 amount  | double precision      |           | not null | 
Indexes:
    "donation_pkey" PRIMARY KEY, btree (donarid)

tydb=# insert into donation values(default,'Mahesh','mahesh@gmail.com','shivajinagar','pune','maharashtra','411005','400');
INSERT 0 1
tydb=# select * from donation;
 donarid |  name   |       email       |   address    | city |    state    | pincode | amount 
---------+---------+-------------------+--------------+------+-------------+---------+--------
       1 | nikita  | nikita@gmail.com  | limaye nagar | pune | maharashtra |  411041 |    100
       2 | Akshata | akshata@gmail.com | hadapsar     | pune | maharashtra |  411003 |   1000
       3 | Reshma  | re12@gmail.com    | aalandi      | pune | maharashtra |  411008 |    500
       4 | Sagar   | sa12@gmail.com    | shivajinagar | pune | maharashtra |  411005 |    400
       5 | Mahesh  | mahesh@gmail.com  | shivajinagar | pune | maharashtra |  411005 |    400
(5 rows)
 

--------------------------------------------------------------------------------------
-- Exhibition
----------------------------------------------------------------

tydb=# create table exhibition(exno smallserial primary key not null,ename varchar(20),venue varchar(30),date date,timefrom varchar(20),timeto varchar(20),no_of_days int);
CREATE TABLE
tydb=# \d exhibition;
                                      Table "public.exhibition"
   Column   |         Type          | Collation | Nullable |                 Default                  
------------+-----------------------+-----------+----------+------------------------------------------
 exno       | smallint              |           | not null | nextval('exhibition_exno_seq'::regclass)
 ename      | character varying(20) |           |          | 
 venue      | character varying(30) |           |          | 
 date       | date                  |           |          | 
 timefrom   | character varying(20) |           |          | 
 timeto     | character varying(20) |           |          | 
 no_of_days | integer               |           |          | 
Indexes:
    "exhibition_pkey" PRIMARY KEY, btree (exno)

tydb=# insert into exhibition values(default,'Diwali Material','Modern College',current_date,'9 am','5 pm',1);
INSERT 0 1
tydb=# select * from exhibition;
 exno |        ename        |     venue      |    date    | timefrom | timeto | no_of_days 
------+---------------------+----------------+------------+----------+--------+------------
    1 | Handmade bags       | Soharab hall   | 2018-02-22 | 10 am    | 4 pm   |          1
    2 | Handmade flowers    | Soharab hall   | 2018-04-15 | 12 am    | 5 pm   |          2
    3 | Decoration Material | Santosh hall   | 2019-09-10 | 12 am    | 5 pm   |          2
    4 | Cloths Bags         | Modern Collge  | 2019-11-11 | 10 am    | 4 pm   |          1
    5 | Colorful Gifts      | Modern Collge  | 2019-12-20 | 10 am    | 4 pm   |          1
    6 | Colorful Covers     | Tarangan Hall  | 2019-07-30 | 1 am     | 6 pm   |          3
    7 | Papers Bags         | Tarangan Hall  | 2020-01-21 | 12 am    | 4 pm   |          2
    8 | For Home Products   | Lila Hall      | 2020-02-20 | 12 am    | 3 pm   |          2
    9 | HandMade Candles    | Lila Hall      | 2020-04-25 | 12 am    | 3 pm   |          2
   10 | Decoration Material | Modern College | 2020-03-22 | 11 am    | 3 pm   |          1
   11 | Diwali Material     | Modern College | 2020-02-25 | 9 am     | 5 pm   |          1
(11 rows)
 -----------------------------------------------------------------------------------------------

------- product
------------------------------------------------------------------------------------

tydb=# create table product(pno smallserial primary key not null,pname varchar(20),Quantity int ,price_per_unit float,description varchar(60));
CREATE TABLE
tydb=# \d product;
                                        Table "public.product"
     Column     |         Type          | Collation | Nullable |               Default                
----------------+-----------------------+-----------+----------+--------------------------------------
 pno            | smallint              |           | not null | nextval('product_pno_seq'::regclass)
 pname          | character varying(20) |           |          | 
 quantity       | integer               |           |          | 
 price_per_unit | double precision      |           |          | 
 description    | character varying(60) |           |          | 
Indexes:
    "product_pkey" PRIMARY KEY, btree (pno)

tydb=# insert into product values(default,'Paper Bags',50,'20.00','Different sizes are available');
INSERT 0 1

tydb=# select * from product;
 pno |        pname        | quantity | price_per_unit |                       description                        
-----+---------------------+----------+----------------+----------------------------------------------------------
   1 | Paper Bags          |       50 |             20 | Different sizes are available
   2 | Cloths Bags         |       40 |             40 | Different color and sizes are available
   3 | Candles             |      100 |             10 | Different color and sizes are available
   4 | Handmade Flowers    |      200 |             10 | Different color and sizes are available
   5 | Colorful Covers     |       50 |             60 | Different sizes are available
   6 | Decoration Material |      200 |             10 | Different color and variety are available
   7 | Diwali Material     |      100 |             20 | Different products like panti,akashkandil are available
   8 | Home Use Products   |      100 |             20 | Different products like soap,towels,cloths are available
(8 rows)


----------------------------------------------------------------------------------
------m m relation

--------------------------------------------------------------
tydb=# create table ex_pro(exno int references exhibition on delete cascade on update cascade,pno int references product on delete cascade on update cascade);
CREATE TABLE
tydb=# \d ex_pro;
               Table "public.ex_pro"
 Column |  Type   | Collation | Nullable | Default 
--------+---------+-----------+----------+---------
 exno   | integer |           |          | 
 pno    | integer |           |          | 
Foreign-key constraints:
    "ex_pro_exno_fkey" FOREIGN KEY (exno) REFERENCES exhibition(exno) ON UPDATE CASCADE ON DELETE CASCADE
    "ex_pro_pno_fkey" FOREIGN KEY (pno) REFERENCES product(pno) ON UPDATE CASCADE ON DELETE CASCADE

tydb=# select * from ex_pro;
 exno | pno 
------+-----
    1 |   1
    1 |   2
    2 |   4
    3 |   6
    3 |   5
    4 |   2
    6 |   5
    7 |   1
    9 |   3
   10 |   6
   11 |   7
    8 |   8
(12 rows)
----------------------------------------------------------
---- Contact us
-------------------------------------------------------------
tydb=#  create table contactus(email varchar(20) primary key,message varchar(40));
CREATE TABLE

tydb=# \d contactus;
                     Table "public.contactus"
 Column  |         Type          | Collation | Nullable | Default 
---------+-----------------------+-----------+----------+---------
 email   | character varying(20) |           | not null | 
 message | character varying(40) |           |          | 
Indexes:
    "contactus_pkey" PRIMARY KEY, btree (email)


tydb=# insert into contactus values('nikita@gmail.com','I want more info about ur website');
INSERT 0 1
tydb=# select * from contactus;
      email       |              message              
------------------+-----------------------------------
 nikita@gmail.com | I want more info about ur website
 n@gmail.com      | nb
(2 rows)
 --------------------------------------------------------------------------
 ------parents
----------------------------------------------------------------------

tydb=# create table parent(pid smallserial primary key not null,pname varchar(30),email varchar(25),pdob date,page int,gender varchar(10),pmo_number numeric(10),paddress varchar(30),occupation varchar(20),waddress varchar(30),rel_with_child varchar(10));
CREATE TABLE
tydb=# \d parent;
                                        Table "public.parent"
     Column     |         Type          | Collation | Nullable |               Default               
----------------+-----------------------+-----------+----------+-------------------------------------
 pid            | smallint              |           | not null | nextval('parent_pid_seq'::regclass)
 pname          | character varying(30) |           |          | 
 email          | character varying(25) |           |          | 
 pdob           | date                  |           |          | 
 page           | integer               |           |          | 
 gender         | character varying(10) |           |          | 
 pmo_number     | numeric(10,0)         |           |          | 
 paddress       | character varying(30) |           |          | 
 occupation     | character varying(20) |           |          | 
 waddress       | character varying(30) |           |          | 
 rel_with_child | character varying(10) |           |          | 
Indexes:
    "parent_pkey" PRIMARY KEY, btree (pid)

------------------------------------------------------------------------
-----------------children
-----------------------------------------------------------------------
parents-children(1-m relationship)
tydb=# create table children(cid smallserial primary key not null,cname varchar(20),cdob date,cage int,blood_grp varchar(5),caddress varchar(30),cgender varchar(10),disorder varchar(20),doctor_name varchar(30),dmo_number numeric(10),pid int references parent on delete cascade on update cascade);
CREATE TABLE
tydb=# \d children;
                                      Table "public.children"
   Column    |         Type          | Collation | Nullable |                Default                
-------------+-----------------------+-----------+----------+---------------------------------------
 cid         | smallint              |           | not null | nextval('children_cid_seq'::regclass)
 cname       | character varying(20) |           |          | 
 cdob        | date                  |           |          | 
 cage        | integer               |           |          | 
 blood_grp   | character varying(5)  |           |          | 
 caddress    | character varying(30) |           |          | 
 cgender     | character varying(10) |           |          | 
 disorder    | character varying(20) |           |          | 
 doctor_name | character varying(30) |           |          | 
 dmo_number  | numeric(10,0)         |           |          | 
 pid         | integer               |           |          | 
Indexes:
    "children_pkey" PRIMARY KEY, btree (cid)
Foreign-key constraints:
    "children_pid_fkey" FOREIGN KEY (pid) REFERENCES parent(pid) ON UPDATE CASCADE ON DELETE CASCADE
 

-----------------------------------------------------------------------------------
-----------------Admission
----------------------------------------------------------------------------------------

tydb=# create table admission(adid smallserial primary key not null,admission_type varchar(20) check(admission_type in('Full Day','Temporary','Residential')),pid int references parent on delete cascade on update cascade,cid int references children on delete cascade on update cascade);
CREATE TABLE
tydb=# \d admission;
                                        Table "public.admission"
     Column     |         Type          | Collation | Nullable |                 Default                 
----------------+-----------------------+-----------+----------+-----------------------------------------
 adid           | smallint              |           | not null | nextval('admission_adid_seq'::regclass)
 admission_type | character varying(20) |           |          | 
 pid            | integer               |           |          | 
 cid            | integer               |           |          | 
Indexes:
    "admission_pkey" PRIMARY KEY, btree (adid)
Check constraints:
    "admission_admission_type_check" CHECK (admission_type::text = ANY (ARRAY['Full Day'::character varying, 'Temporary'::character varying, 'Residential'::character varying]::text[]))
Foreign-key constraints:
    "admission_cid_fkey" FOREIGN KEY (cid) REFERENCES children(cid) ON UPDATE CASCADE ON DELETE CASCADE
    "admission_pid_fkey" FOREIGN KEY (pid) REFERENCES parent(pid) ON UPDATE CASCADE ON DELETE CASCADE



