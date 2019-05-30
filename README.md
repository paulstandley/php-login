# **PHP** Login System **Paul Standley**

![Profile Pick](http://res.cloudinary.com/pieol2/image/upload/v1516543296/profile-small.png)

---

[mmtuts](https://www.youtube.com/watch?v=xb8aad4MRx8&list=PL0eyrZgxdwhwBToawjm9faF1ixePexft-&index=44) 10:12

---

## MYSQL

```mysql
CREATE TABLE users (
  user_id int(11) NOT null AUTO_INCREMENT PRIMARY KEY,
  user_first varchar(256) NOT null,
  user_last varchar(256) NOT null, user_email varchar(256) NOT null, 
  user_uid varchar(256) NOT null,
  user_pwd varchar(256) NOT null
  );
```