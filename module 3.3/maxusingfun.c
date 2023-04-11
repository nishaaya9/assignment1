#include<stdio.h>
int maximum(int []);
int main()
{   
    int a[5]={2,4,16,1,8},max;
    printf("array elements : ");
    for (size_t i = 0; i <5; i++)
    {
        printf("%d ",a[i]);
    }
    max=maximum(a);
    printf("\nmax is %d",max);

    return 0;
}

int maximum(int a[])
{
    int i,max=0;
    for ( i = 0; i < 5; i++)
    {
        if (a[i]>max)
        max=a[i];
        
    }
    return max;
}