#include <iostream>
using namespace std;
template <class T>
class calculation
{
public:
    T tem, a, b;
    calculation()
    {
        cout << "Enter value of a = ";
        cin >> a;
        cout << "Enter value of b = ";
        cin >> b;
        cout << endl;
        cout << "Before Swapping" << endl;
        cout << "a = " << a << endl;
        cout << "b = " << b << endl;
    }
    void swap()
    {
        tem = a;
        a = b;
        b = tem;
        cout << endl;
        cout << "After Swapping" << endl;
        cout << "a = " << a << endl;
        cout << "b = " << b;
    }
};
int main()
{
    calculation<int> obj;
    obj.swap();
    return 0;
}