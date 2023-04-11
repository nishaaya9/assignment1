#include<stdio.h>
#include<string.h>
struct employee
{
    int empno,age;
    char empname[20],address[30];  
};

int main()
{
    struct employee e1,e2,e3,e4,e5;
    e1.empno=1;
    strcpy(e1.empname,"Ronak");
    strcpy(e1.address,"Silver chowk");
    e1.age=30;

    e2.empno=2;
    strcpy(e2.empname,"Mohit");
    strcpy(e2.address,"Kiran chowk");
    e2.age=26;

    e3.empno=3;
    strcpy(e3.empname,"Naitik");
    strcpy(e3.address,"Manek chowk");
    e3.age=20;

    e4.empno=4;
    strcpy(e4.empname,"Madhav");
    strcpy(e4.address,"Kargil chowk");
    e4.age=25;

    e5.empno=5;
    strcpy(e5.empname,"Vraj");
    strcpy(e5.address,"Tower chowk");
    e5.age=18;

    printf("empno : %d\nempname : %s\naddress : %s\nage : %d\n",e1.empno,e1.empname,e1.address,e1.age);
    printf("\n");
    printf("empno : %d\nempname : %s\naddress : %s\nage : %d\n",e2.empno,e2.empname,e2.address,e2.age);
    printf("\n");
    printf("empno : %d\nempname : %s\naddress : %s\nage : %d\n",e3.empno,e3.empname,e3.address,e3.age);
    printf("\n");
    printf("empno : %d\nempname : %s\naddress : %s\nage : %d\n",e4.empno,e4.empname,e4.address,e4.age);
    printf("\n");
    printf("empno : %d\nempname : %s\naddress : %s\nage : %d\n",e5.empno,e5.empname,e5.address,e5.age);

return 0;
}