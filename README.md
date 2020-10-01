# pile
public access log

### input POST or GET
    http://example.com/pile-in.php?from=1234&to=4321&msg=asdfasdf

### output everything
    http://example.com/pile-out.php
	
### output after specific date
    http://example.com/pile-out.php?date=2020-09-01

### remove the log file
    http://example.com/pile-in.php?remove_the_file=1

the config file can be edited to include some sort of security
