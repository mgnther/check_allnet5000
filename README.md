# check_allnet5000

Nagios/Icinga Plugin for Allnet 5000

## Usage

Put the check_allnet5000 script in your Nagios/Icinga-Plugin folder (/usr/lib/nagios/plugins),  
make it executable with  
`chmod +x ./check_allnet5000`
and execute it.  

  `./check_allnet5000 <hostname> <username> <password> <sensorid> <warning> <critical>`   
  
e.g.:  
  `.\check_allnet5000 192.168.0.10 admin 123 110 25 35`
