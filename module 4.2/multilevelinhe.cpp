/*Create a class person having members name and age. Derive a class student having member percentage. Derive another class teacher having member
salary. Write necessary member function to initialize, read and write data. Write also Main function.*/

#include <iostream>
using namespace std;
class person
{
public:
    string name;
    int age = 24;
    void getdata()
    {
        cout << "Enter your name : ";
        getline(cin, name);
        // cout << "Enter your age : ";
        // cin >> age;
        cout << endl;
        cout << "Name : " << name << endl;
        cout << "Age : " << age << endl;
    }
};
class student : public person
{
public:
    float percentage;
    void data(float percentage)
    {
        cout << "Percentage : " << percentage << "%" << endl;
        cout << endl;
    }
};
class teacher : public person
{
public:
    int salary;
    void data(int salary)
    {
        cout << "Salary : " << salary << endl;
    }
};
int main()
{
    student obj1;
    obj1.getdata();
    obj1.data(95);
    teacher obj2;
    obj2.getdata();
    obj2.data(30000);

    return 0;
}