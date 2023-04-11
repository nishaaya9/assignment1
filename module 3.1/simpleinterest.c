# include<stdio.h>
int main()
{
    float p,t,r,si;
    printf("enter principal amount : ");
    scanf("%f",&p);    
    printf("enter time : ");
    scanf("%f",&t);
    printf("enter rate of interest : ");
    scanf("%f",&r);
    si=p*t*r/100;
    printf("simple interest is %f",si);
    return 0;
}