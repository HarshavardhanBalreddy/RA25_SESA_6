import random
import os
n = int(input("how many records needed "));
filename = "datalist.csv"

vehicle_type = ['bus','sedan','medium-heavy-truck','amblance','fire-truck','oil-tanker','jeep','police-trck','school-bus','taxi','truck','van','auto','small-truck','cargo-truck','heavy cargo-trck'];
sex=['male','female'];
bloodgroup=['A-ve','A+ve','B+ve','B-ve','O+ve','O-ve','AB+ve','AB-ve'];
brand=['CTH','Mercedes','Ashok Leyland','BMW','BMW X7','Toyoto','Mahindra','Tata Motors','Ford','Elite'];
model=['A8','124 Spider','190 E','X7','MK7','Elite','TUV 300','Bolero','Excelo'];
department=['HPF','HP','H'];
location=['Chennai','Bangalore','Hyderabad','Chittoor','Unnamed location'];

if os.path.exists(filename):
    os.remove(filename)

data = open(filename,"a")
data.write("vehicle Type,Age,Sex,Blood_group,Severity,Brand,Model,Dimension,Air_Bags,Capacity,Timestamp date,Timestamp time,Department contacted,Location_Lon_Lat,Location,\n");


for i in range(0,n):
    data.write(vehicle_type[random.randint(0,len(vehicle_type)-1)])
    data.write("," + str(random.randint(15,60)))
    data.write("," + str(sex[random.randint(0,1)]))
    data.write("," + str(bloodgroup[random.randint(0,len(bloodgroup)-1)]))
    data.write("," + str(random.randint(2,3)))
    data.write("," + str(brand[random.randint(0,len(brand)-1)]))
    data.write("," + str(model[random.randint(0,len(model)-1)]))
    data.write("," + str("{} x {}".format(random.randint(300,2000),random.randint(400,3020))))
    data.write("," + str(random.randint(3,15)))
    data.write("," + str(random.randint(2,20)))
    data.write("," + str("{}-{}-{}".format(random.randint(1,30),random.randint(1,12),random.randint(2019,2020))))
    data.write("," + str("{}:{}:{}".format(random.randint(1,23),random.randint(0,59),random.randint(0,59))))
    data.write("," + str(department[random.randint(0,len(department)-1)]))
    data.write("," + str("{}.{};{}.{}".format(random.randint(12,78),random.randint(100000,999999),random.randint(12,78),random.randint(100000,999999))))
    data.write("," + str(location[random.randint(0,len(location)-1)]))
    
   

    #add other attributes
    data.write(",\n")

    print("generating record "+str(i+1))

data.close()