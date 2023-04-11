// WAP to create simple calculator using class

#include <iostream>
using namespace std;
class calculator
{
public:
    void operations(int a, int b)
    {
        cout << endl;
        cout << "addition is " << a + b << endl;
        cout << "subtraction is " << a - b << endl;
        cout << "multiplication is " << a * b << endl;
        cout << "division is " << a / b;
    }
};
int main()
{

    calculator obj;
    int a, b;

    cout << "enter value of a : ";
    cin >> a;

    cout << "enter value of b : ";
    cin >> b;

    obj.operations(a, b);
    return 0;
}
