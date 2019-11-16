# 伪随机数
Windows下写main函数执行

	int a,b,c,d;
	srand(10520);
	a = rand()%10520;
	b = rand()%10520;
	c = rand()%10520;
	d = rand()%10520;
	intotal=a+b+c+d;
	printf("%d",intotal);
