#include <iostream>
using namespace std;
class operators
{
public:
    operators(int a, int b) // constructor
    {
        cout << "addition is" << a + b << endl;
        cout << "subtraction is" << a - b << endl;
        cout << "multiplication is" << a * b << endl;
        cout << "division is" << a / b << endl;
    }
};
int main()
{
    int a, b;

    cout << "enter value of a : ";
    cin >> a;

    cout << "enter value of b : ";
    cin >> b;

    operators obj(a, b);
    return 0;
}