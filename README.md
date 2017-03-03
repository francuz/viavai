# viavai
Crawler and Html code to geolocate rooms for rent in Rome

This is a project I just started and that I might keep working on it or not. 

I want to support kijiji website users that are looking for a room for rent. The crawler searches for ads on the website and the html code displays the location of the rooms on a google map.

It was inspired by padmapper.com idea and it can be extended to several cities across Europe.
I am aware that many websites already do a better job, but this might be useful to improve the functionalities of kijiji (and similar room hunting websites). 

The code is very primitive and needs a lot of improvement:
The crawler does not look for the gps coordinates itself, so, for now, it must be done manually.
The geolocation information in the code is limited to the city center of Rome and the latest update is from February the 15th 2017


How to use it:


1) copy all the files on an Apache webserver <br>
2) run crawler.php <br>
3) the crawler will save a folder (./parsed_xml) on the server containing the extrated information (in xml format) about rooms for rent in some areas of Rome <br>
4) open the xml files and edit the description fields with the GPS coordinates <br>
  NOTE: this is the weakest part of this program, since it has not an authomatic way to edit the description fields with GPS coordinates. <br>
5) Run the viavai.html code to see the locations of the rooms for rent <br>

