#include<stdio.h>
#include<string.h>
struct employee
{
    int empno,age;
    char empname[20],address[30];  
};

int main()
{
    struct employee e1;
    e1.empno=01;
    strcpy(e1.empname,"Ronak");
    strcpy(e1.address,"Silver chowk");
    e1.age=30;

    printf("empno : %d\nempname : %s\naddress : %s\nage : %d",e1.empno,e1.empname,e1.address,e1.age);

return 0;
}