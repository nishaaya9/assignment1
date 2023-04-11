#include <iostream>
using namespace std;
class user
{
public:
    void operation()
    {
        cout << "Area of Circle  : " << 3.14 * 5 * 5 << endl;
    }
    void operation(int l, int b)
    {
        cout << "Area of Rectangle : " << l * b << endl;
    }
    void operation(double h, double b)
    {
        cout << "Area of Triangle : " << h * b / 2 << endl;
    }
};
int main()
{
    user obj;
    obj.operation();
    obj.operation(4, 2);
    obj.operation(2.00, 4.00);

    return 0;
}