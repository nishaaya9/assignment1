#include <iostream>
using namespace std;
template <class T>
class array
{
public:
    T i, j, a[5], temp;
    array()
    {
        cout << "Enter elements : ";
        for (i = 0; i < 5; i++)
        {
            cin >> a[i];
        }
    }
    void sort()
    {
        cout << "\nThe array after sorting is :" << endl;
        for (i = 0; i < 5; i++)
        {
            for (j = i + 1; j < 5; j++)
            {
                if (a[i] > a[j])
                {
                    temp = a[i];
                    a[i] = a[j];
                    a[j] = temp;
                }
            }
        }
        for (i = 0; i < 5; i++)
        {
            cout << a[i] << " ";
        }
    }
};
int main()
{
    array<int> obj;
    obj.sort();
    return 0;
}
