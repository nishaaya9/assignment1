#include <iostream>
using namespace std;
class student
{
public:
    int r_no;
    void roll_no()
    {
        cout << "Roll No. : 1" << endl;
    }
};
class test : public student
{
public:
    int sub1 = 99, sub2 = 99;
    void sub()
    {
        cout << "Marks of sub1  : " << sub1 << endl;
        cout << "Marks of sub2 : " << sub2 << endl;
    }
};
class result : public test
{
public:
    int total_marks;
    void total()
    {
        cout << "Total marks : " << sub1 + sub2 << endl;
    }
};
int main()
{
    result obj;
    obj.roll_no();
    obj.sub();
    obj.total();

    return 0;
}