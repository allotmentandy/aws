variable "awsprops" {
  type = map(string)
  default = {
    region       = "eu-west-2"
    vpc          = "vpc-04a899695f093e273"
    ami          = "ami-050949f5d3aede071"
    itype        = "t2.micro"
    subnet       = "subnet-071b970b97329866c"
    publicip     = true
    keyname      = "amazon nov 2021"
    secgroupname = "IAC-Sec-Group-Terrform"
  }
}

provider "aws" {
  region = lookup(var.awsprops, "region")
}

resource "aws_security_group" "project-iac-sg" {
  name        = lookup(var.awsprops, "secgroupname")
  description = lookup(var.awsprops, "secgroupname")
  vpc_id      = lookup(var.awsprops, "vpc")

  // To Allow SSH Transport
  ingress {
    from_port   = 22
    protocol    = "tcp"
    to_port     = 22
    cidr_blocks = ["0.0.0.0/0"]
  }

  // To Allow Port 80 Transport
  ingress {
    from_port   = 80
    protocol    = "tcp"
    to_port     = 80
    cidr_blocks = ["0.0.0.0/0"]
  }

  egress {
    from_port   = 0
    to_port     = 0
    protocol    = "-1"
    cidr_blocks = ["0.0.0.0/0"]
  }

  lifecycle {
    create_before_destroy = true
  }
}


resource "aws_instance" "project-iac" {
  ami                         = lookup(var.awsprops, "ami")
  instance_type               = lookup(var.awsprops, "itype")
  subnet_id                   = lookup(var.awsprops, "subnet") #FFXsubnet2
  associate_public_ip_address = lookup(var.awsprops, "publicip")
  key_name                    = lookup(var.awsprops, "keyname")


  vpc_security_group_ids = [
    aws_security_group.project-iac-sg.id
  ]
  root_block_device {
    delete_on_termination = true
    iops                  = 150
    volume_size           = 29
    volume_type           = "gp3"
  }
  tags = {
    Name        = "SERVER01"
    Environment = "DEV"
    OS          = "DEBIAN"
    Managed     = "IAC"
  }

  depends_on = [aws_security_group.project-iac-sg]
}

data "aws_eip" "project-iac" {
  id = "eipalloc-07a144e8268e6616b"
}

resource "aws_eip_association" "my_eip_association" {
  instance_id   = aws_instance.project-iac.id
  allocation_id = data.aws_eip.project-iac.id

}

output "ec2instance" {
  value = aws_instance.project-iac.public_ip
}
