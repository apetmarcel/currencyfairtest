# currencyfairtest

Due to phisical resources limits, I could not complete the test at the hardest level. 
To complete the test at the hard level I would have needed a Virtual server or a dedicated one, in order to be able to use as much RAM as possible. 
I would have installed redis, a non-relational, key-value pair database, which saves the info in the RAM very quickly. 
I could not use a realtime framework, as from what I understand, that needs to be installed on the server. 

I coded a php rate limiting. I used the MySql database where I set up a counter and a trigger. 
Every time a row is inserted in the table that stores the messages, 
the trigger will increase the counter automatically found on a different table and update a timestamp. 
If in the same second the counter reaches a certain value considered maximum, then the code skips processing any messages,
until the next second,  when the counter is reset to 0. 

