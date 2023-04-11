#include <iostream>
using namespace std;
class A
{
public:
    int a, b;
    A()
    {
        cout << "Enter value of a : ";
        cin >> a;
        cout << "Enter value of b : ";
        cin >> b;
    }
    friend class B;
};
class B
{
public:
    void display(A &obj)
    {
        cout << endl;
        if (obj.a > obj.b)
        {
            cout << "max number is " << obj.a << endl;
        }
        else
        {
            cout << "max number is " << obj.b << endl;
        }
    }
};
int main()
{
    A obj;
    B obj2;
    obj2.display(obj);
    return 0;
}