#include <iostream>
using namespace std;
class user
{
public:
    void operation()
    {
        cout << "Addition : " << 3 + 2 << endl;
    }
    void operation(int b)
    {
        cout << "Subtraction : " << 5 - b << endl;
    }
    void operation(int x, int y)
    {
        cout << "Multiplication : " << x * y << endl;
    }
    void operation(double c, double d)
    {
        cout << "Division : " << c / d << endl;
    }
};
int main()
{
    user obj;
    obj.operation();
    obj.operation(4);
    obj.operation(2, 4);
    obj.operation(50.00, 2.00);
    return 0;
}