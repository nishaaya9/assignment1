#include<stdio.h>
#include<string.h>
int main()
{
    char a[20],b[20];
    printf("enter string : ");
    gets(a);
    strcpy(b,a);
    strrev(b);
    if (strcmp(a,b)==0)
    {
        printf("string is palindrome");
    }
    else
    {
        printf("string is not palindrome");
    }
    
return 0;
}