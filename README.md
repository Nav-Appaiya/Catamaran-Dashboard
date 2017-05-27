catamaran-dashboard
===================

Dit is een dashboard interface voor ons Arduino Catamaran project waarbij we data(watermetingen) van onze autonome  catamaran visualizeren in een dashboard. Dit dashboard is gebouwd met Symfony 3.2 en heeft een maps integratie om de gemeten data netjes te weergeven. 

todo list
===================
- Visualizeren van de arduino sensordata in een dashboard met een maps integratie
- Bewaren van de data in de database
- Arduino catamaran data mag met een import in de database gezet worden, om vervolgens getoond te worden in het dashboard. 

GeoJSON
===================
Voor het bijhouden en weergeven van de gemeten waarde van onze catamaran, gebruiken we de geoJSON format. Deze type van opslag middels JSON  geeft ons de mogelijkheid om ook properties mee te geven met de metingen. Hieronder zie je een voorbeeld van deze data format:

``````
{
  "geometry": {
    "coordinates": [
      4.226339716607811,
      51.92276177394001
    ],
    "type": "Point"
  },
  "type": "Feature",
  "properties": {
    "temperatuur": 9.5,
    "pw_waarde": 8.5
  }
}
``````

Onze volledige GEOJSON dataset is hier te vinden: https://gist.github.com/Nav-Appaiya/3e6f0f884f133bac35a7b05f9e6254c3
 
 