#include <iostream>
using namespace std;
inline int multiplication(int a, int b)
{
    return (a * b);
}
inline int cubic(int a)
{
    return (a * a * a);
}
int main()
{
    cout << "\nmultiplication : " << multiplication(2, 5) << endl;
    cout << "cubic : " << cubic(20);
    return 0;
}