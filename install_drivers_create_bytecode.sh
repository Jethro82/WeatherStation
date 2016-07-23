#needs to be run as sudo
#needs to be run after Temp_Lib has been put in home/pi.
sudo apt-get update
sudo apt-get install apache2 libapache2-mod-php5 php5 
sudo apt-get install php5-mysql mysql-server python-mysqldb
python -m /home/pi/Temp_Lib.py
