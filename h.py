# This is a sample Python script.

# Press Shift+F10 to execute it or replace it with your code.
# Press Double Shift to search everywhere for classes, files, tool windows, actions, and settings.

import mysql.connector

mydb=mysql.connector.connect(host="127.0.0.1",user="pdo_test1",password="nJMIKQeXMRorQ76H",database="pdo_test1")

mycursor=mydb.cursor()
mycursor.execute("SELECT house_no , landmark , street, area ,village ,district , sub_district, states FROM address_format")
myresult=mycursor.fetchone()
print("Content=Type:Text/html; charset=utf-8\n\n")
def address(s):
    p = s.split(",")
    abc = ''
    for i in p:
        abc = abc + i + ' ,'
    abc = abc.lower()
    l = abc.split()
    k = []
    m = []
    for i in l:
        if (abc.count(i) >= 1):
            if i not in k or i == ',':
                k.append(i)
    for i in k:
        i = i.capitalize()
        m.append(i)
    final = (' '.join(m))
    a = final.split(",")
    print(',\n'.join(a))
address(str(myresult))


# See PyCharm help at https://www.jetbrains.com/help/pycharm/
