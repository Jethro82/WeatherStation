Create Database WeatherStation;
use WeatherStation
Create Table tblTemp(Temp Decimal(3,1), Time TimeStamp default now(), ReadingType char(1) not null);
Create Index indxTime on tblTemp(Time);
create user WeatherStationFE identified by `WSFE1';
grant select on tblTemp to WeatherStationFE;
create user WSRecorder identified by 'WSR1';
grant insert on tblTemp to WSRecorder;
