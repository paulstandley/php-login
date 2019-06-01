# **PHP** Login System **Paul Standley**

![Profile Pick](img/profile.png)

---

## A lesson by [mmtuts](https://www.youtube.com/watch?v=LC9GaXkdxF8)

---

## MYSQL

```mysql
CREATE TABLE users (
  user_id int(11) NOT null AUTO_INCREMENT PRIMARY KEY,
  user_first varchar(256) NOT null,
  user_last varchar(256) NOT null,
  user_email varchar(256) NOT null,
  user_uid varchar(256) NOT null,
  user_pwd varchar(256) NOT null
  );
```