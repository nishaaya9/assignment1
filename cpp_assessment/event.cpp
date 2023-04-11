#include <iostream>
#include <stdio.h>
#include <math.h>
#include <string.h>
using namespace std;
class event
{
private:
    string e_name, c_name;
    float Cost1, Cost2, CostForOneServer, TotalFoodCost, AverageCost, TotalCost, DepositAmount;
    float guest, min, server;
    const double CostPerHour = 18.50;
    const double CostPerMinute = .40;
    const double CostOfDinner = 20.70;

public:
    void input()
    {
        cout << endl;
        cout << "********************Event Management system**********************" << endl;
        cout << "\nEnter the name of the event" << endl;
        cin >> e_name;
        cout << "Enter the customer's first and last name " << endl;
        // cin >> c_name;
        getline(cin >> ws, c_name);
        cout << "Enter the number of guests" << endl;
        cin >> guest;
        cout << "Enter the number of minutes in the event" << endl;
        cin >> min;
    }
    void estimate()
    {
        cout << endl;
        cout << "====================Event estimate for : " << c_name << "=======================" << endl;
        server = guest / 20;
        cout << "Number Of Server : " << server << endl;
        Cost1 = (int)min / 60 * CostPerHour;
        Cost2 = (int)min % 60 * CostPerMinute;
        CostForOneServer = Cost1 + Cost2;
        cout << "The Cost for Servers : " << floor(CostForOneServer) << endl;
        TotalFoodCost = guest * CostOfDinner;
        cout << "The Cost for Food is : " << TotalFoodCost << endl;
        AverageCost = TotalFoodCost / guest;
        cout << "Average Cost Per Person : " << AverageCost << endl;
        TotalCost = TotalFoodCost + (CostForOneServer * server);
        cout << "Total cost is : " << TotalCost << endl;
        cout << endl;
        cout << "Please deposite a 25% deposit to reserve the event" << endl;
        DepositAmount = TotalCost * .25;
        cout << "The deposit needed is : " << DepositAmount;
    }
};
int main()
{
    event obj;
    obj.input();
    obj.estimate();
    return 0;
}