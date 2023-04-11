/* Assume a class cricketer is declared. Declare a derived class batsman from cricketer.Data member of batsman.
Total runs, Average runs and best performance.Member functions input data, calculate average runs, Display data.(Single Inheritance)*/

#include <iostream>
using namespace std;
class cricketer
{
};
class batsman : public cricketer
{
public:
    int m[5] = {55, 80, 99, 63, 83};
    int Total_runs = 0, Avg_runs;
    void input_data()
    {
        for (int i = 0; i < 5; i++)
        {
            Total_runs += m[i];
        }
    }
    void calculate_average_runs()
    {
        Avg_runs = Total_runs / 5;
    }
    void Display_data()
    {
        int max;
        max = m[0];
        for (int i = 1; i < 5; i++)
        {
            if (max < m[i])
            {
                max = m[i];
            }
        }
        cout << "Total runs : " << Total_runs << endl;
        cout << "Average_runs : " << Avg_runs << endl;
        cout << "Best performance : " << max;
    }
};
int main()
{
    batsman obj;
    obj.input_data();
    obj.calculate_average_runs();
    obj.Display_data();
    return 0;
}