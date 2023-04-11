#include <iostream>
using namespace std;
class bank
{
public:
    string name, ac_type;
    double ac_num, ac_balance;

    void assign_values()
    {
        cout << "Enter Name : ";
        cin >> name;
        cout << "Enter Account Number : ";
        cin >> ac_num;
        cout << "Enter Account Type : ";
        cin >> ac_type;
        cout << "Enter Opening balance : ";
        cin >> ac_balance;
    }
    void deposite()
    {
        int deposite = 0;
        cout << "Enter Deposit amount : ";
        cin >> deposite;
        ac_balance += deposite;
        cout << "Account balance : " << ac_balance << endl;
    }
    void withdraw()
    {
        int withdraw;
        cout << "Balance amount : " << ac_balance;
        cout << "\nEnter Withdraw amount : ";
        cin >> withdraw;
        if (ac_balance > withdraw)
        {
            ac_balance -= withdraw;
            cout << "After withdraw balance is = " << ac_balance << endl;
        }
        else
        {
            cout << "\n Not Enough Balance"<<endl;
        }
    }
    void display()
    {
        cout << "    Details     " << endl;
        cout << "Name : " << name << endl;
        cout << "AC No. : " << ac_num << endl;
        cout << "AC type : " << ac_type << endl;
        cout << "Balance : " << ac_balance << endl;
    }
};
int main()
{
    bank obj;
    int choice;
    do
    {
        cout << "\n----Banking System Program----" << endl;
        cout << "1) To assign value" << endl;
        cout << "2) To Deposit" << endl;
        cout << "3) To Withdraw" << endl;
        cout << "4) To Display All Details" << endl;
        cout << "5) Exit" << endl;

        cout << "\nEnter your choice : ";
        cin >> choice;

        switch (choice)
        {
        case 1:
            obj.assign_values();
            break;
        case 2:
            obj.deposite();
            break;
        case 3:
            obj.withdraw();
            break;
        case 4:
            obj.display();
            break;
        case 5:
            cout << "Exit";
            break;
        }
    } while (choice != 5);

    return 0;
}