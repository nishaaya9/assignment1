// Write a program to swap the two numbers using friend function without using third variable

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
    // friend class B;
};
class B
{
public:
    void display(A &obj)
    {
        cout << endl;
        cout << "After Swap.." << endl;
        cout << "a : " << obj.b << endl;
        cout << "b : " << obj.a;
    }
};

int main()
{
    A obj;
    B obj2;
    obj2.display(obj);
    return 0;
}
