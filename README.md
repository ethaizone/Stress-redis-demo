# Stress-redis-demo
Try to add stress data to redis and do something like on other DB. Demo is PHP. This demo use phpredis extension. Test on PHP5. If you have any case that you think it's tough job on other DBMS, you can create pull-request and submit your case to this repo. Don't forget to add your credit too.

# How to use
- Install phpredis extension. Required.
- Edit `redis.inc.php` to config connection to redis.
- Run this code in terminal. `build.php` is code to build demo data to redis in each case. `query.php` is code for test as query data from redis.