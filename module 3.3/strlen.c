#include<stdio.h>
int main()
{
    char str[50];
    int i=0,count=0;
    printf("enter string : ");
    gets(str);
    while (str[i]!='\0')
    {
        count++;
        i++;
    }
    printf("string length = %d",count);
    
return 0;
}