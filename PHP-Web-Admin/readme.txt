The files in this folder can be used to manage a list of ID's to names along with time's of use/access.

- I wanted a way that needed no DB setup (i'm very familiar with DB's but some need the most simple 
way to get things up and running and installing a SQL service adds complexities)
- So this system uses a.csv file... nice and easy (well was kinda a pain to pars in code -vs- using tsql to a db but I did all that so now its easy to setup and use)

V1 (as of 10/29/2015) 
- Has no working edit via the GUI... will fix soon.
- Needs basic login, else its a wide open... will add soon
- Yo need to change the code a bit to work with your domain... 
    - Look in index.php and delete.php for "your-domain" and change that to be your server IP or domain name.  (this to should be fixed as self refracing value)
- You can pass a ID to checkid.php to get its status (this can be used by your MCU to know if its ok to open the door)
   - format/test url: http://www.your-domain.com/checkid.php?idx=123456

That's All...
Shane Weddle (sweddle@slorobotics.com)

