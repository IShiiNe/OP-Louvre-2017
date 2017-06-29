<?php

namespace OP\TradeBundle\Form;

use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\Extension\Core\Type\CheckboxType;
use Symfony\Component\Form\Extension\Core\Type\DateType;
use Symfony\Component\Form\Extension\Core\Type\SubmitType;
use Symfony\Component\Form\Extension\Core\Type\TextType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;

class TicketType extends AbstractType
{
  public function buildForm(FormBuilderInterface $builder, array $options)
  {
    $builder
      ->add('name',     TextType::class)
      ->add('dateBirth',    DateType::class, array(
									    'widget' => 'choice',
									    'format' => 'dd-MM-yyyy',))
      ->add('reduced', CheckboxType::class, array('required' => false))
      ->add('save',      SubmitType::class);
  }

}
