#include <iostream>
using namespace std;
class matrix
{
public:
    int a[5], ans[5];
    void data()
    {
        cout << "enter values of 1st matrix : \n";
        for (int i = 0; i < 5; i++)
        {
            cin >> a[i];
        }
    }
    void operator+(matrix mat)
    {
        for (int j = 0; j < 5; j++)
        {
            ans[j] = a[j] + mat.a[j];
            cout << ans[j] << endl;
        }
    }
};
int main()
{
    matrix obj1, obj2;
    obj1.data();
    obj2.data();
    cout << "Addition of matrix " << endl;
    obj1 + obj2;
    return 0;
}
